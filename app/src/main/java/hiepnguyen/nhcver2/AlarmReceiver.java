package hiepnguyen.nhcver2;

import android.app.Notification;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.preference.PreferenceManager;
import android.support.v4.app.NotificationCompat;

import static android.content.Context.NOTIFICATION_SERVICE;

/**
 * Created by Administrator on 23/12/2017.
 */

public class AlarmReceiver extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        SharedPreferences prefs = PreferenceManager.getDefaultSharedPreferences(context);
        boolean useNotification = prefs.getBoolean("use_notification",
                true);

        if (useNotification) {

            CharSequence title = "Lunch!";
            int icon = R.drawable.stat_notify_chat;
            CharSequence text = "It's time for lunch! Aren't you hungry?";

            long time = System.currentTimeMillis();

            NotificationCompat.Builder mBuilder =
                    new NotificationCompat.Builder(context)
                            .setSmallIcon(icon)
                            .setContentTitle(title)
                            .setContentText(text);

            Intent resultIntent = new Intent(context, AlarmActivity.class);

            PendingIntent resultPendingIntent =
                    PendingIntent.getActivity(
                            context,
                            0,
                            resultIntent,
                            PendingIntent.FLAG_UPDATE_CURRENT
                    );

            mBuilder.setContentIntent(resultPendingIntent);


            int mNotificationId = 111;
            NotificationManager mNotifyMgr =
                    (NotificationManager) context.getSystemService(NOTIFICATION_SERVICE);
            mNotifyMgr.notify(mNotificationId, mBuilder.build());

        } else {
            Intent i = new Intent(context, AlarmActivity.class);

            i.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);

            context.startActivity(i);
        }
    }

}
