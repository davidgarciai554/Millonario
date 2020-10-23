@extends('layouts.layout')
<script>
    var correcta = '{{$pregunta[0]->correcta}}';
     function validaRespuesta(id){
        console.log(id)
     }


</script>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br>
            <button class="btn btn-block btn-warning disabled"> {{$pregunta[0]->enunciado}}</button>
            <br><br>
            <button class="btn btn-block btn-primary " id="1" onClick="validaRespuesta(this.id)"> {{$pregunta[0]->r1}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="2" onClick="validaRespuesta(this.id)"> {{$pregunta[0]->r2}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="3" onClick="validaRespuesta(this.id)"> {{$pregunta[0]->r3}} </button>
            <br><br>
            <button class="btn btn-block btn-primary " id="4" onClick="validaRespuesta(this.id)"> {{$pregunta[0]->r4}} </button>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>