class PaymentCard extends Payment{
    constructor(number, cvv, dateExp){
        this.number = number;
        this.cvv = cvv;
        this.dateExp = dateExp;
    }
}