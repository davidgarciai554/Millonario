@extends('layouts.layout')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button class="btn btn-block btn-warning disabled"> {{$pregunta[0]->enunciado}}</button>
            <br><br>
            <button class="btn btn-block btn-primary "> {{$pregunta[0]->r1}} </button>
            <br><br>
            <button class="btn btn-block btn-primary "> {{$pregunta[0]->r2}} </button>
            <br><br>
            <button class="btn btn-block btn-primary "> {{$pregunta[0]->r3}} </button>
            <br><br>
            <button class="btn btn-block btn-primary "> {{$pregunta[0]->r4}} </button>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>