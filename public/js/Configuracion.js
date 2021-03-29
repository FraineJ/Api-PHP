var gsUrlApi;
//var gsAutenticacion = { "Authorization": "Basic " + btoa("caminosips:caminos1_xxxx") };
var sAmbiente = "DEBUG";

switch (sAmbiente) {
    case "DESARROLLO":
        gsUrlApi = "http://localhost/TiendaSoft/";
        break;
    case "PRODUCCION":
        gsUrlApi = "http://40.87.68.203/apifacturacion";
        break;
    default:
        gsUrlApi = "http://localhost/TiendaSoft/";
}
