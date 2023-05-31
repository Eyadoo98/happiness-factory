<div>
    <div class="h-24"></div>
    <div class="container mx-auto  px-10">
        <div class="flex">
            <div>
                <h1 class="text-slate-900 font-bold bg-tomato ml-0 md:ml-44 p-2 text-3xl" >LET'S CREATE HAPPINESS TOGETHER</h1>
            </div>
        </div>

        <div class="h-9"></div>
        <div x-data="{ form1: true, form2 : false , form3:false , form4:false}">
            <div class="flex md:ml-44 md:flex-row flex-col">
                <div class="md:w-1/4 w-full text-right mr-4 cursor-pointer">
                    <div class="bg-white border border-tomato">
                        <div x-on:click="form1=true,form2=false,form3=false,form4=false" x-bind:class="form1 ? 'bg-tomato text-white' : 'bg-white'" class="border border-tomato p-5 font-bold text-center">
                            Job Application
                        </div>
                        <i class="fa fa-arrow-right relative left-2 -top-10 h-0 text-tomato" x-bind:class="form1 ? 'block' : 'hidden' "></i>
                        <div @click="form1=false,form2=true,form3=false,form4=false" x-bind:class="form2 ? 'bg-tomato text-white' : 'bg-white'" class="border border-tomato p-5 font-bold text-center">Partnership Offer</div>
                        <i class="fa fa-arrow-right relative left-2 -top-10 h-0 text-tomato" x-bind:class="form2 ? 'block' : 'hidden' "></i>
                        <div x-on:click="form1=false,form2=false,form3=true,form4=false" x-bind:class="form3 ? 'bg-tomato text-white' : 'bg-white'" class="border border-tomato p-5 font-bold text-center">Service Request</div>
                        <i class="fa fa-arrow-right relative left-2 -top-10 h-0 text-tomato" x-bind:class="form3 ? 'block' : 'hidden' "></i>

                        <div x-on:click="form1=false,form2=false,form3=false,form4=true"  x-bind:class="form4 ? 'bg-tomato text-white' : 'bg-white'"class="border border-tomato p-5 font-bold text-center">Service Offer</div>
                        <i class="fa fa-arrow-right relative left-2 -top-10 h-0 text-tomato" x-bind:class="form4 ? 'block' : 'hidden' "></i>
                    </div>
                </div>
                <div class="md:w-9/12 w-full">

                    <div x-show="form1" x-cloak>
                        @livewire('happiness-factory.form-content-section' ,
                        [
                            'mainContent'=>'JOB APPLICATION',
                            'subContent'=>'Tell us about yourself, and attach your resume.',
                        ])
                    </div>
                    <div x-show="form2" x-cloak>
                        @livewire('happiness-factory.form-content-section' ,
                        [
                            'mainContent'=>'PARTNERSHIP OFFER',
                            'subContent'=>'Let‘s Build This Partnership!',
                        ])
                    </div>
                    <div x-show="form3" x-cloak>
                        @livewire('happiness-factory.form-content-section' ,
                        [
                            'mainContent'=>'SERVICE REQUEST',
                            'subContent'=>'Our next experiences, shall we say?',
                        ])
                    </div>
                    <div x-show="form4" x-cloak>
                        @livewire('happiness-factory.form-content-section' ,
                        [
                            'mainContent'=>'SERVICE OFFER',
                            'subContent'=>'Tell us about what you got!',
                        ])
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="h-24"></div>

</div>
