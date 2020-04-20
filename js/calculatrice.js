function calcul() {
    let form = document.getElementById("calculatrice");
    let nb1 = parseFloat(form["nb1"].value);
    let nb2 = parseFloat(form["nb2"].value);
    let op_type = form["operation_type"].value;
    let result;
    switch (op_type) {
        case "add":
            result = nb1 + nb2;
            break;
        case "substract":
            result = nb1 - nb2;
            break;
        case "multiply":
            result = nb1 * nb2;
            break;
        case "divide":
            result = nb1 / nb2;
            break;
    }
    form["result"].defaultValue = result.toString();
}