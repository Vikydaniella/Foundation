@extends('layouts.layout')

@section('content')


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Seamless4Good Foundation</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Meet the foundation changing lives: Seamless4Good.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Mission</div>    
                        </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Empowering people with disabilities through Technology Education
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Codeable Project</div></div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Codeable is a unified programme for people living with disabilities and those who aren't to learn technology.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vision</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   To give back to the society.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <a href='/foundation/create' class="ml-1 underline"> Register for the next cohort.</a>
                            <a href='/foundation' class="ml-1 underline"> Join us</a>
                            <a href='/foundation/1' class="ml-1 underline"> Codeable Gallery</a>
                        </div>
                    </div>
                    
                    <h5>Our Partners</h5>
                    <img src="/img/So.png"width="200px"alt="Special Olympics logo">
                    </n>
                    <img src="/img/LSSC1.png"width="200px"alt="Lagos State Sports Commissions logo">
                    </n>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        SeamlessHR CRS
                    </div>
                </div>
            </div>
        </div>
    
@endsection