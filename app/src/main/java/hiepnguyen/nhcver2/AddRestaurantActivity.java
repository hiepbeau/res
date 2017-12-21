package hiepnguyen.nhcver2;

import android.app.Activity;
import android.app.TabActivity;
import android.content.Context;
import android.database.Cursor;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.LayoutInflater;
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

public class AddRestaurantActivity extends TabActivity {
    RestaurantAdapter adapter = null;
    Button btnSave, btnCancel;
    ListView listView;
    EditText name = null;
    EditText address = null;
    RadioGroup types = null;

    Cursor model = null;
    RestaurantHelper helper = null;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_restaurant);

        helper = new RestaurantHelper(this);

        name = (EditText) findViewById(R.id.name);
        address = (EditText) findViewById(R.id.addr);
        types = (RadioGroup) findViewById(R.id.types);

        btnSave = (Button) findViewById(R.id.save);
        btnSave.setOnClickListener(onSave);

        listView = (ListView) findViewById(R.id.restaurants);

        model = helper.getAllDB();
        startManagingCursor(model);
        adapter = new RestaurantAdapter(model);
        listView.setAdapter(adapter);
        // tabhost
        TabHost.TabSpec spec = getTabHost().newTabSpec("tag1");
        spec.setContent(R.id.restaurants);
        spec.setIndicator("List", getResources()
                .getDrawable(R.drawable.list));
        getTabHost().addTab(spec);

        spec = getTabHost().newTabSpec("tag2");
        spec.setContent(R.id.details);
        spec.setIndicator("Details", getResources()
                .getDrawable(R.drawable.restaurant));
        getTabHost().addTab(spec);

        getTabHost().setCurrentTab(0);

        listView.setOnItemClickListener(onListClick);
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();

        helper.close();
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
            helper.insert(name.getText().toString(), address.getText().toString(), type);
            model.requery();
        }
    };


    AdapterView.OnItemClickListener onListClick = new AdapterView.OnItemClickListener() {
        @Override
        public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {

            model.moveToPosition(i);
            name.setText(helper.getName(model));
            address.setText(helper.getAddress(model));

            if (helper.getType(model).equals("sit_down")) {
                types.check(R.id.sit_down);
            } else if (helper.getType(model).equals("take_out")) {
                types.check(R.id.take_out);
            } else {
                types.check(R.id.delivery);
            }

            getTabHost().setCurrentTab(1);
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
