<script type="text/javascript">

function yesnoCheck() {
	if(document.getElementById('yesCheck1').checked) {
        document.getElementById('ifYes2').style.display = 'block';
    }
    else document.getElementById('ifYes2').style.display = 'none';

    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }else document.getElementById('ifYes').style.display = 'none';

}
</script>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Formulario de Ventas</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>Formulario de Ventas</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nombre Vendedor</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Numero de identificacion</span>
                    <input type="email" name="email">
                </label>
            </div>
      
            <div class="form-row">
                <label>
                    <span>Pie/Deposito</span>
                    <input type="text" name="name">
                </label>
            </div>
	 
            <div class="form-row">
                <label>
                    <span>Proyecto Innova</span>
                    <select name="dropdown">
                        <option value='1'>Innova I</option>
                        <option value='2'>Innova II</option>
                        <option value='3'>Innova III</option>
                        <option value='4'>Innova IV</option>
                    </select>
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Numero de departamento</span>
                    <input type="text" name="name">
                </label>
            </div>
<div class="form-row">
                <label><span>Metodo de pago</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" onclick="javascript:yesnoCheck();" name="tipodepago" id="noCheck" value="contado">
                            <span>Contado</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" onclick="javascript:yesnoCheck();" name="tipodepago" id="yesCheck" value="cuotas">
                            <span>Cuotas</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio"  onclick="javascript:yesnoCheck();" name="tipodepago" id="yesCheck1" value="cheques">
                            <span>Cheques</span>
                        </label>
                    </div>
					<div id="ifYes" style="display:none">
        						Cantidad de cuotas: 
                                        <div class="form-group">
                                            <select class="form-control" name="level">
                                                <option value="1">6</option>
                                                <option value="2">12</option>
                                                <option value="3">18</option>
                                            </select>
                                        </div>
    				</div><div id="ifYes2" style="display:none">
        						Numero de Cheques: 
                                        <div class="form-group">
                                            <select class="form-control" name="level">
                                                <option value="1">3</option>
                                                <option value="2">6</option>
                                                <option value="3">12</option>
                                            </select>
                                        </div>
    									</div>
                </div>
            </div>
            <div class="form-row">
                <label>
                    <span>Comentarios</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>

       <div class="form-title-row">
                <h1>Datos del cliente</h1>
            </div>

<div class="form-row">
                <label>
                    <span>Nombre Cliente</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span> RUT</span>
                    <input type="email" name="email">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Telefono</span>
                    <input type="text" name="name">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Mail contacto</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Previa reserva</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Ingresar Formulario</button>
            </div>

        </form>

    </div>

</body>

</html>
