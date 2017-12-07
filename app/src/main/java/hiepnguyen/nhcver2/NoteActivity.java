package hiepnguyen.nhcver2;

import android.app.Activity;
import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;

public class NoteActivity extends BaseAtivity implements AdapterView.OnItemClickListener {
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
                Intent intent = new Intent(activity, NoteCreate.class);
                startActivity(intent);
            }
        });

        listView = (ListView) findViewById(R.id.noteList);


        listView.setOnItemClickListener(this);

    }

    @Override
    int getNavigationMenuItemId() {
        return R.id.navigation_note;
    }

    @Override
    public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
        AlertDialog.Builder alert = new AlertDialog.Builder(activity);
        alert.setTitle(titles.get(i).toString());
        alert.setMessage(contents.get(i).toString());
        alert.setPositiveButton("OK", null);
        alert.show();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        super.onCreateOptionsMenu(menu);
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.note_menu, menu);
        return true;
    }
}
