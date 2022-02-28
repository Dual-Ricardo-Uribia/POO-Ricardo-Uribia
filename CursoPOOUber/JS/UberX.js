class UberX extends Car{
    constructor(licencia, driver, brand, model){
    super(licencia, driver, brand, model)
    }
    printDataUberX(){
        console.log(this.licencia)
        console.log(this.driver)
        console.log(this.brand)
        console.log(this.model)
        
    }

}