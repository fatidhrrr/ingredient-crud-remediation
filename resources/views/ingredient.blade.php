@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Ingrédients</h3>
            <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ingredients</th>
                        <th scope="col">Kg</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ingredients as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->ingredient}}</td>
                        <td>{{$item->kg}}</td>
                    <td>
                        <a href='{{route('edit', $item->id)}}' class='btn btn-warning'>Edit</a>
                        <a href='{{route('delete', $item->id)}}' class='btn btn-danger'>Delete</a>
                        <a href='{{route('show', $item->id)}}' class='btn btn-danger'>Show</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center ">
            <a href="{{route('add')}}" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</a>
            </div>
        </div>
    </div>
</section>