package hiepnguyen.nhcver2;

import android.Manifest;
import android.app.Activity;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.database.Cursor;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class DetailFormActivity extends Activity {
    EditText name = null;
    EditText address = null;
    RadioGroup types = null;
    EditText feed = null;
    RestaurantHelper helper = null;
    String restaurantId = null;
    TextView location = null;
    LocationManager locMgr = null;
    double latitude = 21.001332d;
    double longitude = 105.820098d;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_form);

        locMgr = (LocationManager) getSystemService(LOCATION_SERVICE);
        helper = new RestaurantHelper(this);

        name = (EditText) findViewById(R.id.name);
        address = (EditText) findViewById(R.id.addr);
        types = (RadioGroup) findViewById(R.id.types);
        feed = (EditText) findViewById(R.id.feed);
        location = (TextView) findViewById(R.id.location);

        restaurantId = getIntent().getStringExtra(AddRestaurantActivity.ID_EXTRA);

        Button save = (Button) findViewById(R.id.save);

        save.setOnClickListener(onSave);

        if (restaurantId != null) {
            load();
        }

    }

    @Override
    protected void onPause() {
        locMgr.removeUpdates(onLocationChange);

        super.onPause();
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        helper.close();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        new MenuInflater(this).inflate(R.menu.details_option, menu);

        return (super.onCreateOptionsMenu(menu));
    }


    @Override
    public boolean onPrepareOptionsMenu(Menu menu) {
        if (restaurantId == null) {
            menu.findItem(R.id.location).setEnabled(false);
            menu.findItem(R.id.map).setEnabled(false);
        }

        return (super.onPrepareOptionsMenu(menu));
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        if (item.getItemId() == R.id.feed) {
            if (isNetworkAvailable()) {
                Intent i = new Intent(this, FeedActivity.class);

                i.putExtra(FeedActivity.FEED_URL, feed.getText().toString());
                startActivity(i);
            } else {
                Toast
                        .makeText(this, "Sorry, the Internet is not available",
                                Toast.LENGTH_LONG)
                        .show();
            }

            return (true);
        } else if (item.getItemId() == R.id.location) {
            if (ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
                // TODO: Consider calling
                //    ActivityCompat#requestPermissions
                // here to request the missing permissions, and then overriding
                //   public void onRequestPermissionsResult(int requestCode, String[] permissions,
                //                                          int[] grantResults)
                // to handle the case where the user grants the permission. See the documentation
                // for ActivityCompat#requestPermissions for more details.
                locMgr.requestLocationUpdates(LocationManager.GPS_PROVIDER,
                        0, 0, onLocationChange);
                return true;
            }


            return (true);
        } else if (item.getItemId() == R.id.map) {
            Intent i = new Intent(this, MapRestaurantActivity.class);

            i.putExtra(MapRestaurantActivity.EXTRA_LATITUDE, latitude);
            i.putExtra(MapRestaurantActivity.EXTRA_LONGITUDE, longitude);
            i.putExtra(MapRestaurantActivity.EXTRA_NAME, name.getText().toString());

            startActivity(i);

            return (true);
        }

        return (super.onOptionsItemSelected(item));
    }

    private boolean isNetworkAvailable() {
        ConnectivityManager cm = (ConnectivityManager) getSystemService(CONNECTIVITY_SERVICE);
        NetworkInfo info = cm.getActiveNetworkInfo();

        return (info != null);
    }

    private void load() {
        Cursor c = helper.getById(restaurantId);

        c.moveToFirst();
        name.setText(helper.getName(c));
        address.setText(helper.getAddress(c));
        feed.setText(helper.getFeed(c));

        if (helper.getType(c).equals("sit_down")) {
            types.check(R.id.sit_down);
        } else if (helper.getType(c).equals("take_out")) {
            types.check(R.id.take_out);
        } else {
            types.check(R.id.delivery);
        }
        latitude = helper.getLatitude(c);
        longitude = helper.getLongitude(c);
        location.setText(String.valueOf(latitude)
                + ", "
                + String.valueOf(longitude));
        c.close();
    }


    private View.OnClickListener onSave = new View.OnClickListener() {
        @Override
        public void onClick(View view) {
            if (name.getText().toString().length() > 0) {

                String type = null;

                switch (types.getCheckedRadioButtonId()) {
                    case R.id.sit_down:
                        type = "sit_down";
                        break;
                    case R.id.take_out:
                        type = "take_out";
                        break;
                    case R.id.delivery:
                        type = "delivery";
                        break;
                }
                if (restaurantId == null) {
                    helper.insert(name.getText().toString(),
                            address.getText().toString(), type, feed.getText().toString()
                    );
                } else {
                    helper.update(restaurantId, name.getText().toString(),
                            address.getText().toString(), type, feed.getText().toString());
                }
            }
            finish();
        }
    };

    LocationListener onLocationChange = new LocationListener() {
        @Override
        public void onLocationChanged(Location fix) {
            helper.updateLocation(restaurantId, fix.getLatitude(),
                    fix.getLongitude());
            location.setText(String.valueOf(fix.getLatitude())
                    + ", "
                    + String.valueOf(fix.getLongitude()));
            locMgr.removeUpdates(onLocationChange);

            Toast.makeText(DetailFormActivity.this, "Location saved",
                    Toast.LENGTH_LONG).show();
        }

        @Override
        public void onStatusChanged(String s, int i, Bundle bundle) {

        }

        @Override
        public void onProviderEnabled(String s) {

        }

        @Override
        public void onProviderDisabled(String s) {

        }
    };


}
