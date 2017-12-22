package hiepnguyen.nhcver2;

import android.app.Activity;
import android.database.Cursor;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioGroup;

public class DetailFormActivity extends Activity {
    EditText name = null;
    EditText address = null;
    RadioGroup types = null;
    RestaurantHelper helper = null;
    String restaurantId = null;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_form);

        helper = new RestaurantHelper(this);

        name = (EditText) findViewById(R.id.name);
        address = (EditText) findViewById(R.id.addr);
        types = (RadioGroup) findViewById(R.id.types);

        Button save = (Button) findViewById(R.id.save);

        save.setOnClickListener(onSave);
        restaurantId = getIntent().getStringExtra(AddRestaurantActivity.ID_EXTRA);

        if (restaurantId != null) {
            load();
        }

    }



    @Override
    protected void onDestroy() {
        super.onDestroy();
        helper.close();
    }

    private void load() {
        Cursor c = helper.getById(restaurantId);

        c.moveToFirst();
        name.setText(helper.getName(c));
        address.setText(helper.getAddress(c));

        if (helper.getType(c).equals("sit_down")) {
            types.check(R.id.sit_down);
        } else if (helper.getType(c).equals("take_out")) {
            types.check(R.id.take_out);
        } else {
            types.check(R.id.delivery);
        }
        c.close();
    }


    private View.OnClickListener onSave = new View.OnClickListener() {
        @Override
        public void onClick(View view) {
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
                        address.getText().toString(), type
                );
            } else {
                helper.update(restaurantId, name.getText().toString(),
                        address.getText().toString(), type);
            }
            finish();
        }
    };


}
