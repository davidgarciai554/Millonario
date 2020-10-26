@extends('layouts.layout')

<div class="container" id="div1">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script>

    var correcta = '{{$pregunta[0]->correcta}}';
    var numPreguntas='{{$numPreguntas or 0}}';
    console.log(correcta)
    console.log(numPreguntas)
    
    function validaRespuesta(id) {
        if (correcta == id) {
            numPreguntas++;

            $('#' + id).removeClass('btn btn-block btn-primary ').addClass('btn btn-block btn-success ');
            for (var i = 0; i <= 4; i++) {
                $('#' + i).attr('disabled', 'disabled');
            }
            $('#siguientePregunta').removeAttr('hidden').text("Siguiente pregunta " + numPreguntas)
        } else {
            $('#' + id).removeClass('btn btn-block btn-primary ').addClass('btn btn-block btn-danger disabled');
            $('#' + correcta).removeClass('btn btn-block btn-primary ').addClass('btn btn-block btn-success disabled');
            $('#siguientePregunta').removeAttr('hidden').text("Volver a empezar " + numPreguntas).attr(href="{{ url('vistaPreguntas',('1')) }}")
            for (var i = 0; i <= 4; i++) {
                $('#' + i).attr('disabled', 'disabled');
            }
        }
        console.log(numPreguntas)
    }

    function wait(ms) {
        var d = new Date();
        var d2 = null;
        do {
            d2 = new Date();
        }
        while (d2 - d < ms);
    }
</script>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br>
            <button class="btn btn-block btn-warning disabled" disabled> {{$pregunta[0]->enunciado}}</button>
            <br><br>
            <button class="btn btn-block btn-primary " id="1" onClick="validaRespuesta(this.id),wait(400)"> {{$pregunta[0]->r1}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="2" onClick="validaRespuesta(this.id),wait(400)"> {{$pregunta[0]->r2}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="3" onClick="validaRespuesta(this.id),wait(400)"> {{$pregunta[0]->r3}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="4" onClick="validaRespuesta(this.id),wait(400)"> {{$pregunta[0]->r4}} </button>
            <br><br>
            <button class="btn btn-block btn-dark " id="siguientePregunta"  hidden ></button>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>