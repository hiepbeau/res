package hiepnguyen.nhcver2;

import android.app.Activity;
import android.app.ListActivity;
import android.app.SearchManager;
import android.app.TabActivity;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.database.Cursor;
import android.preference.PreferenceManager;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.CursorAdapter;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.RadioGroup;
import android.widget.TabHost;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

import hiepnguyen.nhcver2.Model.RestaurantModel;

public class AddRestaurantActivity extends ListActivity {
    public final static String ID_EXTRA = "hiepnguyen.nhcver2._ID";

    RestaurantAdapter adapter = null;
    Cursor model = null;
    RestaurantHelper helper = null;
    SharedPreferences prefs = null;

    public static ArrayList<String> divisions;
    public static RestaurantHelper restaurantHelper;
    public static Activity activity;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_restaurant);

        //note
        activity = this;
        restaurantHelper = new RestaurantHelper(this);

        divisions = new ArrayList<>();
        divisions.add("Takeout");
        divisions.add("Sitdown");
        divisions.add("Delivery");


        helper = new RestaurantHelper(this);
        prefs = PreferenceManager.getDefaultSharedPreferences(this);
        initList();
        prefs.registerOnSharedPreferenceChangeListener(prefListener);


    }

    @Override
    protected void onDestroy() {
        super.onDestroy();

        helper.close();
    }

    @Override
    protected void onListItemClick(ListView l, View v, int position, long id) {
        Intent i = new Intent(AddRestaurantActivity.this, DetailFormActivity.class);

        i.putExtra(ID_EXTRA, String.valueOf(id));
        startActivity(i);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {

        new MenuInflater(this).inflate(R.menu.option, menu);

        return (super.onCreateOptionsMenu(menu));
    }


    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        if (item.getItemId() == R.id.add) {
            startActivity(new Intent(AddRestaurantActivity.this, DetailFormActivity.class));
            return (true);
        } else if (item.getItemId() == R.id.prefs) {
            startActivity(new Intent(this, EditPreferences.class));
            return (true);
        } else if (item.getItemId() == R.id.search) {
            onSearchRequested();
            return (true);
        }
        return super.onOptionsItemSelected(item);
    }

    private void initList() {
        if (model != null) {
            stopManagingCursor(model);
            model.close();
        }
        String where = null;
        if (Intent.ACTION_SEARCH.equals(getIntent().getAction())) {
            where = "name LIKE \"%" + getIntent().getStringExtra(SearchManager.QUERY) + "%\"";
        }
        model = helper.getAllDB(where, prefs.getString("sort_order", "name"));
        startManagingCursor(model);
        adapter = new RestaurantAdapter(model);
        setListAdapter(adapter);
    }


    SharedPreferences.OnSharedPreferenceChangeListener prefListener = new SharedPreferences.OnSharedPreferenceChangeListener() {
        @Override
        public void onSharedPreferenceChanged(SharedPreferences sharedPreferences, String s) {
            if (s.equals("sort_order")) {
                initList();
            }
        }
    };


    class RestaurantAdapter extends CursorAdapter {
        RestaurantAdapter(Cursor c) {
            super(AddRestaurantActivity.this, c);
        }

        @Override
        public View newView(Context context, Cursor cursor, ViewGroup viewGroup) {
            LayoutInflater inflater = getLayoutInflater();
            View row = inflater.inflate(R.layout.row, viewGroup, false);
            RestaurantHolder holder = new RestaurantHolder(row);

            row.setTag(holder);
            return row;
        }

        @Override
        public void bindView(View view, Context context, Cursor c) {
            RestaurantHolder holder = (RestaurantHolder) view.getTag();

            holder.populateFrom(c, helper);
        }
    }


    static class RestaurantHolder {
        private TextView name = null;
        private TextView address = null;
        private ImageView icon = null;

        RestaurantHolder(View row) {
            name = (TextView) row.findViewById(R.id.title);
            address = (TextView) row.findViewById(R.id.address);
            icon = (ImageView) row.findViewById(R.id.icon);
        }

        void populateFrom(Cursor c, RestaurantHelper helper) {
            name.setText(helper.getName(c));
            address.setText(helper.getAddress(c));

            if (helper.getType(c).equals("sit_down")) {
                icon.setImageResource(R.drawable.ball_red);
            } else if (helper.getType(c).equals("take_out")) {
                icon.setImageResource(R.drawable.ball_yellow);
            } else {
                icon.setImageResource(R.drawable.ball_green);
            }
        }
    }


}
