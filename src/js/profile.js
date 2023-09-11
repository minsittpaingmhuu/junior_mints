class Update{
    constructor(type){
        this.type = type;
    }
    
    
    swapButton = ()=>{
        document.querySelector(`#${this.type}btn`).classList.add("d-none");
        document.querySelector(`#${this.type}show`).classList.add("d-none")
        document.querySelector(`#${this.type}`).classList.remove("d-none");
        document.querySelector(`#${this.type}reset`).classList.remove("d-none")
        document.querySelector(`#${this.type}edit`).classList.remove("d-none")
    }
    backButton = ()=>{
        document.querySelector(`#${this.type}btn`).classList.remove("d-none");
        document.querySelector(`#${this.type}show`).classList.remove("d-none")
        document.querySelector(`#${this.type}`).classList.add("d-none");
        document.querySelector(`#${this.type}reset`).classList.add("d-none")
        document.querySelector(`#${this.type}edit`).classList.add("d-none")
    }


}



var send = (type)=>{
    const update = new Update(type);
    update.swapButton();
}

var back = (type)=>{
    const update = new Update(type);
    update.backButton();
}
