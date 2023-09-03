@extends('frontend.layouts.master')

@section('content')
<div class="relative">
    <div class="sticky top-0 z-10 bg-[rgba(0,0,0,0.65)] backdrop-blur-md border-solid border-b-[1px] border-white-border">
        <h2 class="h-[53px] px-4 flex items-center font-bold text-xl">Home</h2>
    </div>
        <div class="flex px-4 pt-3 border-solid border-b-[1px] border-white-border">
            <div class="mr-3">
                <div class="w-10 h-10 overflow-hidden rounded-full">
                    <img class="object-cover w-full h-full" src="{{ asset('images/profile-image.jpg') }}" alt="">
                </div>
            </div>
            <form class="pb-2 basis-full" action=''>
                <input class="bg-transparent border-0 pl-0 w-full  mb-7 placeholder:text-[#71767B] placeholder:text-xl" type="text" name='text' placeholder="What is happening?!">
                <div class="flex justify-end">
                    <button class="px-4 text-[.9375rem] font-bold min-h-[36px] rounded-full bg-blue text-white-pure" href="">Post</button>
                </div>
            </form>
        </div>
                    {{-- Tweets --}}
                    <div class="flex">
                        <div class="mr-3">
                            <div class="w-10 h-10 overflow-hidden rounded-full">
                                <img class="object-cover w-full h-full" src="{{ asset('images/profile-image.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
</div>
@endsection

