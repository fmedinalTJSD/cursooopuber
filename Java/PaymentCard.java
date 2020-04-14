import java.util.*;
class PaymentCard extends Payment {
    String number; 
    String cvv; 
    Date dateExp;
    
    public PaymentCard(Integer id, String number, String cvv, Date dateExp){
        super(id);
        this.number = number;
        this.cvv = cvv;
        this.dateExp = dateExp;
    }
}