package hiepnguyen.nhcver2;


import android.app.Activity;
import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;
import android.widget.Toast;

/**
 * Created by Administrator on 20/12/2017.
 */

public class RestaurantHelper extends SQLiteOpenHelper {
    private static final String DATABASE_NAME = "restaurant.db";
    private static final int SCHEMA_VERSION = 3;


    public RestaurantHelper(Context context) {
        super(context, DATABASE_NAME, null, SCHEMA_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        sqLiteDatabase.execSQL("CREATE TABLE restaurants (_id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, address TEXT, type TEXT, feed TEXT, lat REAL, lon REAL);");
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        if (i < 2) {
            sqLiteDatabase.execSQL("ALTER TABLE restaurants ADD COLUMN feed TEXT");
        }

        if (i < 3) {
            sqLiteDatabase.execSQL("ALTER TABLE restaurants ADD COLUMN lat REAL");
            sqLiteDatabase.execSQL("ALTER TABLE restaurants ADD COLUMN lon REAL");
        }
    }

    public Cursor getAllDB(String orderBy) {
        return (getReadableDatabase()
                .rawQuery("SELECT _id, name, address, type, lat, lon FROM restaurants ORDER BY " + orderBy,
                        null));
    }

    public Cursor getById(String id) {
        String[] args = {id};

        return (getReadableDatabase()
                .rawQuery("SELECT _id, name, address, type, feed, lat, lon FROM restaurants WHERE _ID=?",
                        args));
    }


    public void insert(String name, String address, String type, String feed) {
        ContentValues cv = new ContentValues();
        cv.put("name", name);
        cv.put("address", address);
        cv.put("type", type);
        cv.put("feed", feed);

        getWritableDatabase().insert("restaurants", "name", cv);

    }


    public void update(String id, String name, String address,
                       String type, String feed) {
        ContentValues cv = new ContentValues();
        String[] args = {id};

        cv.put("name", name);
        cv.put("address", address);
        cv.put("type", type);
        cv.put("feed", feed);

        getWritableDatabase().update("restaurants", cv, "_ID=?",
                args);
    }

    public void updateLocation(String id, double lat, double lon) {
        ContentValues cv = new ContentValues();
        String[] args = {id};

        cv.put("lat", lat);
        cv.put("lon", lon);

        getWritableDatabase().update("restaurants", cv, "_ID=?",
                args);
    }

    public String getName(Cursor c) {
        return (c.getString(1));
    }

    public String getAddress(Cursor c) {
        return (c.getString(2));
    }

    public String getType(Cursor c) {
        return (c.getString(3));
    }

    public String getFeed(Cursor c) {
        return (c.getString(4));
    }

    public double getLatitude(Cursor c) {
        return (c.getDouble(5));
    }

    public double getLongitude(Cursor c) {
        return (c.getDouble(6));
    }
}
