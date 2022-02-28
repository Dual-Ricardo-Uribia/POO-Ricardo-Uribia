class Car{

    constructor(licencia, driver){
        this.id;
        this.licencia = licencia;
        this.driver = driver;
        this.pasajeros;   
    }


printDataCar = () => {
    console.table(this.driver) 
    //imprimirá una tabla con todos los datos
    console.log(this.driver.name)
    console.log(this.driver.document)
    }
}