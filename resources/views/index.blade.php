@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">

            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="text-5xl  sm:text-white uppercase font-bold pb-14">
                    Do you want to become a Developer?
                </h1>
                <a 
                    href="/blog"
                    class="text-center  bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read More</a>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2013/07/13/12/38/computer-mouse-160032__340.png" alt="" width="700">
        </div>

        <div class="m-auto sm:auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a better developer?
            </h2>

            <p class="py-8 text-gray-500 text-sm">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                
            </p>

            <p class="pb-9 text-gray-600 text-sm font-extrabold">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Tenetur officiis facilis fugiat modi! Esse, dolorum dolore veritatis quisquam accusamus odit laboriosam quasi nulla asperiores,
                cupiditate maxime cum, impedit reprehenderit pariatur.
            </p>

            <a class="uppercase bg-blue-500 text-gray-100 font-extrabold py-3 rounded-lg px-8" href="blog/">Find out more</a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5">
            I'm an expert in ....
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            PHP
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Laravelframework
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-xs text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-extrabold text-gray-600 py-10">
            Recent Post
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium recusandae, rerum odit nulla dicta odio dolores saepe aperiam non blanditiis voluptates assumenda, fugit voluptatem voluptate quos officia eligendi maxime dolore.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                   Ad enim placeat cum, dicta aliquam iusto id.
                   Odit aperiam natus quis deserunt nulla molestias, nihil ut necessitatibus, commodi optio pariatur! Eum.

                </h3>

                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2018/03/10/18/03/laptop-3214756__340.png" alt="" width="700">
        </div>


    </div>

@endsection