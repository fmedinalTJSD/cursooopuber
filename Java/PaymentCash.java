class PaymentCash extends Payment {
    Double amount;
    
    public PaymentCash(Integer id, Double amount){
        super(id);
        this.amount = amount;
    }
}