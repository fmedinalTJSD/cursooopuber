class PaymentPayPal extends Payment {
    String email;
    
    public PaymentPayPal(Integer id, String email){
        super(id);
        this.email = email;
    }
}