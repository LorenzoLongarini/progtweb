$(document).ready(function () {

    var patternNotNumber = "^[0-9]*$";

    $("#card-number-area").on("input", function () {
        let creditCardNumber = $(this).val().split("-").join("");

        if (!validateString(creditCardNumber, patternNotNumber)) {
            creditCardNumber = sanitazedString($(this).val(), /[^0-9]+/g, '');
            window.alert("L'identificativo della carta può contenere solo numeri da 0 a 9!");
        }

        changeCardIcon(creditCardNumber.charAt(0));
        $(this).val(joinCharacterToString(creditCardNumber, '.{1,4}', '-'));
    });

    $("#card-expiration-date").on("input", function () {
        let cardExpirationDate = $(this).val().split("/").join("");
    
        if (!validateString(cardExpirationDate, patternNotNumber)) {
            cardExpirationDate = sanitazedString($(this).val(), /[^0-9]+/g, '');
            window.alert("La data di scadenza può contenere solo numeri da 0 a 9!");
        }
    
        $(this).val(joinCharacterToString(cardExpirationDate, '.{1,2}', '/'));

        if ($(this).val().length > 4)
            validateExpirationDate($(this).val());
    });

    $("#card-security-code").on("input", function () {
        if (!validateString($(this).val(), patternNotNumber)) {
            $(this).val(sanitazedString($(this).val(), /[^0-9]+/g, ''));
            window.alert("Il codice CVV può contenere solo numeri!");
        }
    });

    /*
    * Aggiunge alla stringa del primo argomento il carattere joinChar per ogni coppia di caratteri 
    * che corrispondo al match dell'espressione regolare
    */
    function joinCharacterToString(stringInfo, regexMatchExp, joinChar) {
        if (stringInfo.length > 0)
            stringInfo = stringInfo.match(new RegExp(regexMatchExp, 'g')).join(joinChar);
        return stringInfo;
    }

    /*
     * Sostituisce eventuali caratteri selezionati tramite RegExp con quello specificato come argomento.
     */
    function sanitazedString(stringToSanitazed, regexPattern, newChar) {
        return stringToSanitazed.replace(regexPattern, newChar);
    }

    /* 
    * Controlla se la strina rispetta l'espressione regolare specificata come parametro
    */
    function validateString(stringToTest, pattern) {
        let regex = new RegExp(pattern);
        return regex.test(stringToTest);
    }

    //Controlla se la data di scadenza della carta di credito è valida
    function validateExpirationDate(string) {
        let regex = new RegExp("^(0[1-9]|1[0-2])\/([0-9]{2})$", 'g');
        if (!regex.test(string))
            window.alert("La data di scadenza della carta di credito non è valida!");
    }

    //Cambia l'icona dela carta di credito in base alla prima cifra inserita
    function changeCardIcon(firstNumber) {
        let brandName;
        switch (firstNumber) {
            case "4":
                brandName = "visa";
                break;
            case "5":
                brandName = "mastercard";
                break;
            case "7":
                brandName = "am_ex";
                break;
            case "3":
                brandName = "jcb";
                break;
            default:
                brandName = "maestro";
                break;
        }
        $("#bank-logo").attr("src", "./img/payments_icon/" + brandName + "_logo.svg");
    }
});