package Java;

class Main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("ANQUES", new Account("Gera Gu", "AMQUES"), "Ford", "Fiesta");
        // uberX.passenger = 2;
        uberX.setPassenger(4);
        uberX.printDataCar();


        UberVan uberVan = new UberVan("G97GS",new Account("Salvador Velazques", "G67GS"));
        // car2.passenger = 3;
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}