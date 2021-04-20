var gsUrlApi;

var sAmbiente = "DEBUG";

switch (sAmbiente) {
    case "DESARROLLO":
        gsUrlApi = "http://localhost/tienda/tienda/";
        break;
    case "PRODUCCION":
        gsUrlApi = "http://localhost/apifacturacion";
        break;
    default:
        gsUrlApi = "http://localhost/tienda/tienda/";
}
