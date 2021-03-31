var gsUrlApi;
//var gsAutenticacion = { "Authorization": "Basic " + btoa("caminosips:caminos1_xxxx") };
var sAmbiente = "DEBUG";

switch (sAmbiente) {
    case "DESARROLLO":
        gsUrlApi = "http://192.168.1.5/tienda/tienda/";
        break;
    case "PRODUCCION":
        gsUrlApi = "http://192.168.1.5/apifacturacion";
        break;
    default:
        gsUrlApi = "http://192.168.1.5/tienda/tienda/";
}
