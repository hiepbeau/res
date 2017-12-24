package hiepnguyen.nhcver2;

import android.app.Activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.database.Cursor;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class NoteActivity extends BaseAtivity {
    ListView listView;
    ArrayAdapter adapter;
    ArrayList titles;
    ArrayList contents;
    Activity activity = this;

    @Override
    int getContentViewId() {
        return R.layout.activity_note;
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        titles = new ArrayList();
        contents = new ArrayList();


        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab_Note);

        assert fab != null;

        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(NoteActivity.this, "No data...", Toast.LENGTH_SHORT).show();
            }
        });

        listView = (ListView) findViewById(R.id.noteList);

    }


    @Override
    int getNavigationMenuItemId() {
        return R.id.navigation_note;
    }

}
