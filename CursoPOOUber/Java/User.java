package Java;

class user extends Account{

    public user(String name, String document, String email, String password) {
        super(name, document, email, password);
    }
    void printDataUser(){
        System.out.println("Documento user: " + document
        + " Name user: " + name + " Email: " + email + 
        " Password: " + password);
    }
    
}
