package hiepnguyen.nhcver2;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class NoteActivity extends BaseAtivity {

    @Override
    int getContentViewId() {
        return R.layout.activity_note;
    }

    @Override
    int getNavigationMenuItemId() {
        return R.id.navigation_note;
    }

}
