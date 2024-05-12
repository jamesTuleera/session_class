function _id(e){
    return document.getElementById(e)
}

function validateForm(){
    event.preventDefault()
    let fullname =  _id('fullname')
    let phone =  _id('phone')


    //FullName validation
    
    if(fullname.value.length < 1){
        fullname.style.border = '2px solid red'
        return fullname.focus()
    }else{
        fullname.style.border = '2px solid green'
    }

    //FullName validation

    if(phone.value.length < 1){
        phone.style.border = '2px solid red'
        return phone.focus()
    }else{
        phone.style.border = '2px solid green'
    }

    _id('regForm').submit()





}