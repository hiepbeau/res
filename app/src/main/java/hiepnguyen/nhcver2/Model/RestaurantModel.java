package hiepnguyen.nhcver2.Model;

/**
 * Created by Administrator on 20/12/2017.
 */

public class RestaurantModel {

    private String name = "";
    private String address = "";
    private String types = "";
    private String notes = "";

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getTypes() {
        return types;
    }

    public void setTypes(String types) {
        this.types = types;
    }

    public String getNotes() {
        return notes;
    }

    public void setNotes(String notes) {
        this.notes = notes;
    }

    public String toString() {
        return (getName());
    }
}
