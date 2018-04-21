$(document).ready(function () {

    var Nemo = [
        {display: "Nemo 1", value: "Nemo 1"},
        {display: "Nemo 2", value: "Nemo 2"},
        {display: "Nemo 3", value: "Nemo 3"},
        {display: "Nemo 4", value: "Nemo 4"},
    ];

    var Audi = [
        {display: "Audi 1", value: "Audi 1"},
        {display: "Audi 2", value: "Audi 2"},
        {display: "Audi 3", value: "Audi 3"},
        {display: "Audi 4", value: "Audi 4"},
    ];

    var Austin = [
        {display: "Austin 1", value: "Austin 1"},
        {display: "Austin 2", value: "Austin 2"},
        {display: "Austin 3", value: "Austin 3"},
        {display: "Austin 4", value: "Austin 4"},
    ];

    var Bmw = [
        {display: "Bmw 1", value: "Bmw 1"},
        {display: "Bmw 2", value: "Bmw 2"},
        {display: "Bmw 3", value: "Bmw 3"},
        {display: "Bmw 4", value: "Bmw 4"},
    ];

    var Citroen = [
        {display: "Citroen 1", value: "Citroen 1"},
        {display: "Citroen 2", value: "Citroen 2"},
        {display: "Citroen 3", value: "Citroen 3"},
        {display: "Citroen 4", value: "Citroen 4"},
    ];

    var Peugeot = [
        {display: "Peugeot 1", value: "Peugeot 1"},
        {display: "Peugeot 2", value: "Peugeot 2"},
        {display: "Peugeot 3", value: "Peugeot 3"},
        {display: "Peugeot 4", value: "Peugeot 4"},
    ];

    var Toyota = [
        {display: "Toyota 1", value: "Toyota 1"},
        {display: "Toyota 2", value: "Toyota 2"},
        {display: "Toyota 3", value: "Toyota 3"},
        {display: "Toyota 4", value: "Toyota 4"},
    ];

    var Renault = [
        {display: "Renault 1", value: "Renault 1"},
        {display: "Renault 2", value: "Renault 2"},
        {display: "Renault 3", value: "Renault 3"},
        {display: "Renault 4", value: "Renault 4"},
    ];

//Function executes on change of first select option field
    $("#modele").change(function () {

        var select = $("#modele option:selected").val();

        switch (select) {

            case "Nemo":
                marque(Nemo);
                break;

            case "Audi":
                marque(Audi);
                break;
            case "Austin":
                marque(Austin);
                break;

            case "Bmw":
                marque(Bmw);
                break;

            case "Citroen":
                marque(Citroen);
                break;

            case "Peugeot":
                marque(Peugeot);
                break;

            case "Toyota":
                marque(Toyota);
                break;

            case "Renault":
                marque(Renault);
                break;

            default:
                $("#marque").empty();
                $("#marque").append("<option value='0'>--Select--</option>");
                break;
        }
    });

//Function To List out Cities in Second Select tags
    function marque(arr) {
        $("#marque").empty();
        $("#marque").append("<option value='0'>--Select Marque--</option>");
        $(arr).each(function (i) {
            $("#marque").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
        });
    }

});