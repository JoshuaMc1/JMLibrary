@extends('layout.app')

@section('title', trans('auth/index.metadata.title'))

@section('description', trans('auth/index.metadata.description'))

@section('keywords', trans('auth/index.metadata.keywords'))

@section('robots', trans('auth/index.metadata.robots'))

@section('content')
    <div class="flex flex-row min-h-screen">
        <div
            class="hidden md:w-1/2 lg:w-2/3 md:flex justify-center items-center bg-gradient-to-r from-primary to-secondary rounded-r-xl transition-all">
            <svg class="w-96 h-96" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 554.6 520.3">
                <path
                    d="M146.5,1.5c-14.7,2.4-31,6.6-34.4,8.8a8.9,8.9,0,0,0-4.1,6.5l-.8,4.2H97.9c-8.7,0-9.4.2-11.7,2.6s-2.4,3.6-2.7,11.9C83.1,46.4,83.6,46,70.8,46S56.2,48.3,55.7,62.8c-.2,6.5-.7,9.8-1.6,10.3s-4.9.9-9.3.9c-13.5,0-15.5,3-15.5,22.3a152.6,152.6,0,0,1-.6,15.6c-.6,3.1-.8,3.1-5.3,2.6s-10.8,1.2-13.2,4.5-1.9,6.6-2.9,38.5c-.6,19.8-1.5,49.3-2,65.5s-1.7,50.6-2.5,76.5S1.1,354.4.7,364.2L0,381.8l2.6,2.6L5.2,387l18.5-.7c12.1-.4,18.6-.3,18.6.4s68.1,2.7,99.5,2.7c10.9,0,43-1.3,53.5-2.2a134.1,134.1,0,0,1,14.8-.4l5.3.4,2.9,5.7a52.8,52.8,0,0,0,5.4,8.8,21,21,0,0,1,2.7,3.9c.1,1.6,11.3,10.5,17.4,14,9.2,5.1,17,6.8,31.5,6.8s20.7-1.2,30.8-6,24.9-19.8,28.2-29.8l1.2-3.6,12.1-.2,107.3-.2c93.7-.1,95.2-.1,97.4-2.1l2.3-2-.8-34.5c-.4-19-.9-38.3-1-43s-.8-22.2-1.4-39-1.3-31.9-1.6-33.5-1.2-27.3-2.1-57c-1.3-43.9-1.9-54.4-3.1-56.3-2.2-3.6-7.9-5.5-14.4-4.9l-5.7.5-.7-17.1-.7-17.1-3.3-3.3c-3.2-3.2-3.4-3.3-12.4-3.3-11,0-11.1-.1-11.1-13,0-8.8-.1-9.3-2.9-12.1S490,46,482.5,46a87.7,87.7,0,0,1-11-.6l-3-.6-.4-9.4c-.3-8.1-.7-9.7-2.7-11.8s-3.3-2.6-11.5-2.8l-9-.3-.7-3.2C443,11.2,440,9.4,424.6,5.5A180.8,180.8,0,0,0,378.3,0C348.8,0,324,6.7,304.2,20.1c-7.3,4.9-19.4,16.2-24.6,23l-3.5,4.7-5.8-6.7C252,20.2,232.7,8.8,204.3,2.5,194.1.2,158.2-.4,146.5,1.5Zm44.8,17.9c32.7,5,60.2,23,73.4,48l2.6,4.9V277.1l-5.9-6.8c-12.8-14.9-21.8-21.9-37.4-29.4s-22.2-8.4-46.7-8.3c-18.8,0-23.4.4-36.4,2.7L125.1,238c-.4,0-.8-47.7-.8-106V26l2.5-1c3.5-1.3,20.6-4.8,29.1-5.9A149.5,149.5,0,0,1,191.3,19.4Zm213,1.1,15.3,3.1,6.7,1.6V131.6c0,58.5-.2,106.4-.4,106.4l-9.7-1.9a172.6,172.6,0,0,0-45.6-3.8c-20.6.6-30.5,2.9-46.8,11.1a94.9,94.9,0,0,0-32.5,26.3l-6.5,8.1-.3-102.2c-.1-56.1,0-103.1.3-104.3,1-4.2,12.5-20.1,18.7-25.9,15.5-14.3,36.9-23.7,60.8-26.8C371.1,17.8,395.9,18.9,404.3,20.5Zm-296,125.9V254.9l2.2,1.5c3,2.1,5.5,2,19.4-.8,25-5.1,50.1-6.8,64.4-4.5,32.2,5.2,60.1,31.3,69.7,65.2,2.3,8.1,2.6,11.6,3,28.9.4,14.4.2,19.8-.6,19.8-3.4,0-8.4-3.5-13.7-9.6-17.6-20.3-25.5-27-41.4-35.3-29.2-15.3-63.9-16-107.3-2.1-7.1,2.3-22.8,8.2-35,13.2s-23.2,9.2-24.3,9.5l-2.1.5V261.8c0-43.6.4-94.4.8-112.8s.9-38,1.1-43.4C44.6,92,44.7,92,49.9,92c2.3,0,4.5.3,4.7.7s.1,50.2-.5,110.6c-.7,84-.6,110.2.3,111.3s6.1,1.6,18.1-3c31.4-12,56.7-16.1,85.6-13.8,8.1.7,18,1.9,22.1,2.8,20.1,4.2,41,13.7,51.3,23.2,2.4,2.2,3.1,2.4,5.3,1.4s3.1-2.9-.1-7.8c-12.3-18.5-38.2-32.6-67.6-37-16.3-2.4-52.9-1.2-66.4,2.2l-2.4.6V38h8V146.4ZM450.4,39.7c0,1,.2,56,.3,122.2l.4,120.3-4.7-.6a235.1,235.1,0,0,0-44.1-2.3c-16,.4-21.4,1-30.1,3-23.6,5.6-44.2,17.6-55.7,32.6-4.4,5.6-5,7.9-3,9.9s4.1,1.3,11.8-4.5,19.1-11.6,33-16.1,26.8-6.6,48.5-6.6c28.4,0,43.6,2.9,72.4,13.9,12.6,4.8,16.4,5.6,18.3,3.7s1.3-137.9.1-191.5L497,92h5.1c6.2,0,5.9-1.1,6.6,19.5.3,8.2,1,24,1.5,35,1,21.3,2.6,194.5,1.8,194.5s-16-6.4-27.7-11.5c-30.4-13.1-58.9-20.2-85.2-21.2-22-.9-38.2,2.4-55.9,11.2s-27.4,17.1-41.5,33.6c-5.8,6.8-8.3,9-12.4,10.7l-5.2,2.2.4-20.8c.4-19.3.6-21.3,3.2-29.2,10.8-32.7,32.7-55.3,61.5-63.3,6.5-1.8,10.2-2.1,26.6-2s21.2.4,33.5,2.6l21.3,3.9c5.8,1,7.2,1,9.5-.3l2.7-1.5.3-108.7L443.3,38h3.5C449.4,38,450.3,38.4,450.4,39.7ZM84.3,175.7c0,61.5-.4,112.3-.8,112.9s-13.4,5.8-13.7,5.1.2-40.5.6-89.7.7-100.9.8-114.8V64h13ZM480.8,66.2c1,4.6,1,226.8,0,226.8s-12-4.4-12.7-5.5-.8-51.1-.8-112.3V64h6.5C479.7,64,480.3,64.2,480.8,66.2ZM185.3,329.9c10.5,3.1,25.4,11.1,33.6,17.9a199,199,0,0,1,15.6,15.9c10,11.6,14.4,15.3,22.3,18.9,12.4,5.7,26.2,5.5,39-.5,6.6-3,11-7,27.1-24.2a99.4,99.4,0,0,1,43.9-27.6c8.5-2.6,10.1-2.7,28.5-2.7,16.5,0,21.1.3,30,2.2a178,178,0,0,1,36.2,11.6c5.8,2.5,11.1,4.6,11.7,4.6s25,9.7,26.5,10.9,18.4,7.9,25.6,10.3c4.2,1.3,4.7,1.7,2,1.3s-49.8-.5-106.3-.6c-82.3-.2-103,0-103.7,1.1a25.5,25.5,0,0,0-1.4,5.7c-.9,6.4-6.1,15.7-11.8,20.8s-14.1,8.6-24.8,9.2c-23.4,1.4-40.4-11.2-44.5-33-.4-2-1.2-3.7-1.9-3.8H26.8l8-2.8c4.4-1.5,13.4-5.1,20-8.1s17.2-7.2,23.5-9.6,16.6-6.3,22.8-8.8c11.1-4.6,20.2-7.2,35.7-10C148.9,326.3,175.4,327,185.3,329.9Z"
                    style="fill:#fff" />
                <path
                    d="M190.5,48.6c-3.6,2.5-2.7,7.4,1.8,9.6a27,27,0,0,0,6.3,2.3l2.7.5v53.3c0,34.2-.4,55.4-1.1,59.2-2.8,15.2-12.4,24.5-25.1,24.5-6.5,0-11.2-2.6-13.4-7.4-3.5-7.2.8-11.3,8.6-8.2,5.3,2.1,5.6,2,8.5-.9,5.3-5.2,2.2-14.9-5.9-18.6-12-5.4-26.2,1.9-30.1,15.5s2.2,28,16.1,34.6c19.9,9.5,43.9.7,54.3-19.9,6.4-12.5,6.4-12.4,6.8-70.6.2-29.2.6-54,.8-55.1s1.7-2.5,5.2-3.4c5.7-1.4,8.3-3.5,8.3-6.5s-.5-4.4-26.1-8.5C193,46.6,193.3,46.6,190.5,48.6Z"
                    style="fill:#fff" />
                <path
                    d="M390.5,49c-1,1.1-4.9,7.5-8.7,14.2S372,80.7,368.3,87s-9.2,16-12.3,21.5c-8.2,14.7-7.9,14.4-10.4,10.4C328.9,90.8,313.6,66,312,64.2s-5.9-2.8-9.4.2l-2.7,2.4-.2,69.4c-.2,60.4-.4,70.1-1.8,74.1-1.9,5.8-.7,9.7,3.1,9.7s9.7-3.5,12.2-6.6,2.1-3.4,2.1-53.8,0-51,1.9-49.1,6.6,9.6,12.4,19c13.3,21.4,14.1,22.5,17.6,22.5s5.4-2.1,10.5-11.4C368.5,121.2,383.9,95,384.5,95s.8,23.4.8,52c0,46-.2,52.1-1.6,53.2-4.3,3.6-5.4,5-5.4,7.1,0,4.2,1.6,4.7,15.2,4.7,11.6,0,12.8-.2,13.8-1.9s1.2-4.7-1.5-7.9l-2.5-3V50.1l-2.2-1.5C398,46.4,392.8,46.6,390.5,49Z"
                    style="fill:#fff" />
                <path d="M125.8,500V439.8h16.3v47.1h23.2V500Z" style="fill:#fff" />
                <path
                    d="M182.1,434.5a12.7,12.7,0,0,1,6,1.4c1.7,1,2.6,2.9,2.6,5.7s-.9,4.7-2.6,5.7a11.6,11.6,0,0,1-6,1.5,11.1,11.1,0,0,1-6-1.5c-1.7-1-2.5-2.8-2.5-5.7s.8-4.7,2.5-5.7A12.7,12.7,0,0,1,182.1,434.5Zm8,18.9V500H174V453.3h16.1Z"
                    style="fill:#fff" />
                <path
                    d="M217.5,436v14.5c0,1.6-.1,3.2-.2,4.7s-.2,2.9-.4,4.2h.6a16.5,16.5,0,0,1,4.7-4.8,13.7,13.7,0,0,1,7.7-2c4.9,0,8.8,2.1,11.9,6.2s4.6,10.1,4.6,17.9a37.3,37.3,0,0,1-2.1,13.4,17.8,17.8,0,0,1-6,8.2,15.1,15.1,0,0,1-8.9,2.7c-3.3,0-5.8-.6-7.5-1.7a23.3,23.3,0,0,1-4.4-3.7h-1l-2.6,4.6H201.3V436.1h16.2Zm6.5,29.1a6.2,6.2,0,0,0-3.7,1,5.9,5.9,0,0,0-2.1,3.3,16.7,16.7,0,0,0-.7,5.5v2.2c0,3.7.5,6.3,1.5,8.2s2.7,2.5,5.2,2.5,3.3-1,4.4-2.9,1.5-4.8,1.5-8.5-.5-6.5-1.5-8.4A5,5,0,0,0,224,465.1Z"
                    style="fill:#fff" />
                <path
                    d="M283.8,452.5l2.8.3,2.1.2-1.4,15.3-2-.4h-3.5l-3.3.2a10.3,10.3,0,0,0-3.3,1.3,7.2,7.2,0,0,0-2.5,2.7,10.3,10.3,0,0,0-1,5v23H255.6V453.3h12l2.5,7.5h.8a21.5,21.5,0,0,1,3.3-4.3,17.7,17.7,0,0,1,4.5-3A14.5,14.5,0,0,1,283.8,452.5Z"
                    style="fill:#fff" />
                <path
                    d="M318,452.5c5.9,0,10.5,1.5,13.8,4.4s5,7.1,5,12.5V500H325.7l-3.1-6.2h-.3a22,22,0,0,1-4.1,4,15.3,15.3,0,0,1-4.8,2.3,24.9,24.9,0,0,1-6.5.7,17.3,17.3,0,0,1-7.3-1.5,12.9,12.9,0,0,1-5.1-5,16.7,16.7,0,0,1-1.9-8.5c0-5,1.7-8.7,5.2-11.1s8.5-3.8,15-4.1l7.8-.2v-.7c0-2.1-.5-3.6-1.5-4.4A5.9,5.9,0,0,0,315,464a21.5,21.5,0,0,0-6.2,1,46.7,46.7,0,0,0-6.8,2.5l-4.7-10.6a34.8,34.8,0,0,1,9.1-3.1A46.8,46.8,0,0,1,318,452.5Zm2.8,26.6-3.7.3c-3,.1-5,.6-6.2,1.5a4.6,4.6,0,0,0-1.8,3.9,4.5,4.5,0,0,0,1.3,3.5,5.3,5.3,0,0,0,3.4,1,6.7,6.7,0,0,0,5-1.9,6,6,0,0,0,2.1-4.8v-3.5Z"
                    style="fill:#fff" />
                <path
                    d="M376,452.5l2.8.3,2.1.2-1.4,15.3-2-.4H374l-3.3.2a10.3,10.3,0,0,0-3.3,1.3,7.2,7.2,0,0,0-2.5,2.7,10.3,10.3,0,0,0-1,5v23H347.8V453.3h12l2.5,7.5h.8a21.5,21.5,0,0,1,3.3-4.3,16.8,16.8,0,0,1,4.5-3A14.5,14.5,0,0,1,376,452.5Z"
                    style="fill:#fff" />
                <path
                    d="M381.7,453.4h17l7.9,26.7.3,1.4.3,1.8c.1.6.1,1.3.2,1.9h.3a33.7,33.7,0,0,1,1-4.9l8.1-26.9h16.4L414.7,503a36.7,36.7,0,0,1-5,9.5,17.8,17.8,0,0,1-7,5.8,24.2,24.2,0,0,1-10.3,2,21.2,21.2,0,0,1-3.8-.2l-2.8-.5V507a11.7,11.7,0,0,0,2.2.3l2.8.2a8.8,8.8,0,0,0,4.3-1,9,9,0,0,0,2.7-2.8,33.6,33.6,0,0,0,1.9-3.8l.2-.4Z"
                    style="fill:#fff" />
            </svg>
        </div>
        <div
            class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center bg-base-100 px-4 md:px-6 lg:px-12 transition-all">
            <x-floating class="flex flex-row gap-2 justify-center items-center">
                <x-theme />
                <x-language-switch />
            </x-floating>

            @if (session('status'))
                <x-floating location="top-32 right-50">
                    <x-alert.alert :type="session('status.type')" :message="session('status.message')" />
                </x-floating>
            @endif

            <x-card.card class="w-full">
                <x-card.body class="items-center">
                    <h1 class="card-title">{{ trans('auth/index.login') }}</h1>
                    @include('auth.partials.form')
                </x-card.body>
            </x-card.card>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('src/js/app/auth/app-min.js') }}" type="module" async></script>
@endsection
