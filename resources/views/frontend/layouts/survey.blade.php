<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-5">
                <h6 class="text-center">Hey, Before you dive into our hot listings please help us fill this survey to
                    provide you the best!</h6>
                <div class="my-5" style=" height:300px">
                    <div class="container  dot-step">
                        <ul class="d-flex justify-content-center">
                            <li class="progressbar active">
                                <div>
                                    <p></p>
                                </div>
                            </li>
                            <li class="progressbar">
                                <div>
                                    <p></p>
                                </div>
                            </li>
                            <li class="progressbar">
                                <div>
                                    <p></p>
                                </div>
                            </li>
                            <li class="progressbar">
                                <div>
                                    <p></p>
                                </div>
                            </li>
                            <li class="progressbar">
                                <div>
                                    <p></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form action="{{route('survay-store')}}" method="post">
                        @csrf
                        <div class="step step-1 active">
                            <div class="my-2">

                                    <h6>How did you hear about us? 1</h6>

                            </div>
                            <div class="d-flex align-items-center justify-content-around my-5">

                                    <input type="radio" name="que_1" value="Social Media" id="flexRadioDefault1">
                                    <label  for="flexRadioDefault1">
                                        Social Media
                                    </label>


                                    <input type="radio" name="que_1" value="Word of mouth" id="flexRadioDefault2" >
                                    <label  for="flexRadioDefault2">
                                        Word of mouth
                                    </label>


                                    <input type="radio" name="que_1" value="Newspaper ads" id="flexRadioDefault3" >
                                    <label  for="flexRadioDefault3">
                                        Newspaper ads
                                    </label>


                                    <input type="radio" name="que_1" value="From a friend/family" id="flexRadioDefault4" >
                                    <label  for="flexRadioDefault4">
                                        From a friend/family
                                    </label>

                                    {{-- @error('que_1')
                                    <span class="text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror --}}

                            </div>
                            <div>
                                <button type="button" class="btn-ma next-btn" id="b" >Next</button>
                            </div>
                        </div>

                        <div class="step step-2 ">
                            <div class="my-2">

                                    <h6>How did you hear about us? 2</h6>

                            </div>
                            <div class="d-flex align-items-center justify-content-around my-5">

                                    <input type="radio" name="que_2" value="Social Media" id="flexRadioDefault1">
                                    <label  for="flexRadioDefault1">
                                        Social Media
                                    </label>


                                    <input type="radio" name="que_2" value="Word of mouth" id="flexRadioDefault2" >
                                    <label  for="flexRadioDefault2">
                                        Word of mouth
                                    </label>


                                    <input type="radio" name="que_2" value="Newspaper ads" id="flexRadioDefault3" >
                                    <label  for="flexRadioDefault3">
                                        Newspaper ads
                                    </label>


                                    <input type="radio" name="que_2" value="From a friend/family" id="flexRadioDefault4" >
                                    <label  for="flexRadioDefault4">
                                        From a friend/family
                                    </label>

                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b" >Back</button>
                                <button type="button" class="btn-ma next-btn" id="b" >Next</button>
                            </div>
                        </div>

                        <div class="step step-3 ">
                            <div class="my-2">

                                    <h6>How did you hear about us? 3</h6>

                            </div>
                            <div class="d-flex align-items-center justify-content-around my-5">

                                    <input type="radio" name="que_3" value="Social Media" id="flexRadioDefault1">
                                    <label  for="flexRadioDefault1">
                                        Social Media
                                    </label>


                                    <input type="radio" name="que_3" value="Word of mouth" id="flexRadioDefault2" >
                                    <label  for="flexRadioDefault2">
                                        Word of mouth
                                    </label>


                                    <input type="radio" name="que_3" value="Newspaper ads" id="flexRadioDefault3" >
                                    <label  for="flexRadioDefault3">
                                        Newspaper ads
                                    </label>


                                    <input type="radio" name="que_3" value="From a friend/family" id="flexRadioDefault4" >
                                    <label  for="flexRadioDefault4">
                                        From a friend/family
                                    </label>

                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b" >Back</button>
                                <button type="button" class="btn-ma next-btn" id="b" >Next</button>
                            </div>
                        </div>

                        <div class="step step-4 ">
                            <div class="my-2">

                                    <h6>How did you hear about us? 4</h6>

                            </div>
                            <div class="d-flex align-items-center justify-content-around my-5">

                                    <input type="radio" name="que_4" value="Social Media" id="flexRadioDefault1">
                                    <label  for="flexRadioDefault1">
                                        Social Media
                                    </label>


                                    <input type="radio" name="que_4" value="Word of mouth" id="flexRadioDefault2" >
                                    <label  for="flexRadioDefault2">
                                        Word of mouth
                                    </label>


                                    <input type="radio" name="que_4" value="Newspaper ads" id="flexRadioDefault3" >
                                    <label  for="flexRadioDefault3">
                                        Newspaper ads
                                    </label>


                                    <input type="radio" name="que_4" value="From a friend/family" id="flexRadioDefault4" >
                                    <label  for="flexRadioDefault4">
                                        From a friend/family
                                    </label>

                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b" >Back</button>
                                <button type="button" class="btn-ma next-btn" id="b" >Next</button>
                            </div>
                        </div>

                        <div class="step step-5 ">
                            <div class="my-2">

                                    <h6>How did you hear about us? 5</h6>

                            </div>
                            <div class="d-flex align-items-center justify-content-around my-5">

                                    <input type="radio" name="que_5" value="Social Media" id="flexRadioDefault1">
                                    <label  for="flexRadioDefault1">
                                        Social Media
                                    </label>


                                    <input type="radio" name="que_5" value="Word of mouth" id="flexRadioDefault2" >
                                    <label  for="flexRadioDefault2">
                                        Word of mouth
                                    </label>


                                    <input type="radio" name="que_5" value="Newspaper ads" id="flexRadioDefault3" >
                                    <label  for="flexRadioDefault3">
                                        Newspaper ads
                                    </label>


                                    <input type="radio" name="que_5" value="From a friend/family" id="flexRadioDefault4" >
                                    <label  for="flexRadioDefault4">
                                        From a friend/family
                                    </label>

                            </div>

                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b" >Back</button>
                                <button type="submit" class="btn-ma submit-btn" id="b" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    const steps = Array.from(document.querySelectorAll('form .step'));

    const nextBtn = document.querySelectorAll('form .next-btn');
    const prevBtn = document.querySelectorAll('form .prev-btn');
    const progressbar = Array.from(document.querySelectorAll('ul li.progressbar'));

    const submitBtn = document.querySelector('.submit-btn');

   nextBtn.forEach(button=>{
    button.addEventListener('click', ()=>{
        changeStep('next');
    })
   })

   prevBtn.forEach(button=>{
    button.addEventListener('click', ()=>{
        changeStep('prev');
    })
   })



   function changeStep(btn){
    let index = 0;
    let pindex = 0;
    const active = document.querySelector('form .step.active');
    const pActive = document.querySelector('ul li.progressbar.active');
    index = steps.indexOf(active);

    pindex = progressbar.indexOf(pActive);
    steps[index].classList.remove('active');
    progressbar[pindex].classList.remove('active');
    if(btn === 'next'){
            index ++;
            pindex ++;
    }else if(btn === 'prev'){
        index --;
        pindex --;
    }
    steps[index].classList.add('active');
    progressbar[pindex].classList.add('active');

   }



</script>
