<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Producto</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(135deg, #667eea, #764ba2, #ff758c);
    background-size: 300% 300%;
    animation: gradientMove 10s ease infinite;
    min-height: 100vh;
    padding: 60px 20px;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.form-wrapper {
    max-width: 1100px;
    margin: auto;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    border-radius: 25px;
    padding: 50px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    color: white;
}

/* HEADER DEL FORM */
.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.form-header h2 {
    font-size: 28px;
}

.product-id {
    background: rgba(0,0,0,0.3);
    padding: 10px 20px;
    border-radius: 15px;
    font-weight: bold;
    font-size: 16px;
}

/* FORM */
form {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

label {
    font-size: 14px;
    margin-bottom: 8px;
}

input, textarea, select {
    padding: 14px;
    border-radius: 12px;
    border: none;
    outline: none;
    font-size: 14px;
    width: 100%;
}

textarea {
    resize: none;
    height: 120px;
}

/* FILAS */
.row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.btn-submit {
    margin-top: 20px;
    padding: 15px;
    border: none;
    border-radius: 40px;
    background: linear-gradient(45deg, #ff9a9e, #fad0c4);
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit:hover {
    background: linear-gradient(45deg, #a18cd1, #fbc2eb);
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .row {
        grid-template-columns: 1fr;
    }

    .form-wrapper {
        padding: 30px;
    }
}

</style>
</head>

<body>

<div class="form-wrapper">

    <div class="form-header">
        <h2>Agregar Nuevo Producto</h2>
        <div class="product-id">ID: #1024</div>
    </div>

    <form>

        <div>
            <label>Nombre del Producto</label>
            <input type="text" placeholder="Ej: Teclado Mecánico RGB">
        </div>

        <div class="row">
            <div>
                <label>Precio</label>
                <input type="number" placeholder="$0.00">
            </div>

            <div>
                <label>Estado</label>
                <select>
                    <option>Disponible</option>
                    <option>Agotado</option>
                    <option>En oferta</option>
                </select>
            </div>
        </div>

        <div>
            <label>Imagen del Producto</label>
            <input type="file">
        </div>

        <div>
            <label>Descripción</label>
            <textarea placeholder="Describe el producto..."></textarea>
        </div>

        <button type="submit" class="btn-submit">
            Guardar Producto
        </button>

    </form>

</div>

</body>
</html>
