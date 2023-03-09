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
                <p class="ajax-res"></p>
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
                        </ul>
                    </div>
                    <form method="post" action="{{ url('surveystore') }}">
                        @csrf
                        <div class="step step-1 active">
                            <div class="my-2">

                                <h6>How long have you been looking for?</h6>
                                <div>
                                    <p id="message"></p>
                                </div>

                            </div>
                            <div class="d-block d-md-flex align-items-center justify-content-between my-5">
                                <div class="">
                                <input type="radio" name="que_1" value="Below one year" id="flexRadioDefault1" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault1">&nbsp;
                                    Below one year
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_1" value="1-2 years" id="flexRadioDefault2" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault2">&nbsp;
                                    1-2 years
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_1" value="2-5 years" id="flexRadioDefault3" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault3">&nbsp;
                                    2-5 years
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_1" value="5 and above" id="flexRadioDefault4" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault4">&nbsp;
                                    5 and above
                                </label>
                                </div>



                            </div>
                            <div>
                                <button type="button" class="btn-ma next-btn" id="b">Next</button>
                            </div>
                        </div>

                        <div class="step step-2 ">
                            <div class="my-2">

                                <h6>What price range have you been considering?</h6>
                                <div>
                                    <p id="message"></p>
                                </div>

                            </div>
                            <div class="d-block d-md-flex align-items-center justify-content-between my-5">
                                <div class="">
                                <input type="radio" name="que_2" value="80 lakhs - 1 cr" id="flexRadioDefault1" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault1">&nbsp;
                                    80 lakhs - 1 cr
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_2" value="1cr - 2.5cr" id="flexRadioDefault2" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault2">&nbsp;
                                    1cr - 2.5cr
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_2" value="2.5cr - 5.5cr" id="flexRadioDefault3" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault3">&nbsp;
                                    2.5cr - 5.5cr
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_2" value="5.5cr and above" id="flexRadioDefault4" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault4">&nbsp;
                                    5.5cr and above
                                </label>
                                </div>



                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b">Back</button>
                                <button type="button" class="btn-ma next-btn" id="b">Next</button>
                            </div>
                        </div>

                        <div class="step step-3 ">
                            <div class="my-2">

                                <h6>What kind of properties are you looking for? </h6>
                                <div>
                                    <p id="message"></p>
                                </div>

                            </div>
                            <div class="d-block d-md-flex align-items-center justify-content-between my-5">
                                <div class="">
                                <input type="radio" name="que_3" value="Commercial" id="flexRadioDefault1" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault1">&nbsp;
                                    Commercial
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_3" value="Apartments" id="flexRadioDefault2" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault2">&nbsp;
                                    Apartments
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_3" value="Individual house" id="flexRadioDefault3" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault3">&nbsp;
                                    Individual house
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_3" value="Plots" id="flexRadioDefault4" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault4">&nbsp;
                                    Plots
                                </label>
                                </div>



                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b">Back</button>
                                <button type="button" class="btn-ma next-btn" id="b">Next</button>
                            </div>
                        </div>

                        <div class="step step-4 ">
                            <div class="my-2">

                                <h6>What are you employed ? </h6>
                                <div>
                                    <p id="message"></p>
                                </div>

                            </div>
                            <div class="d-block d-md-flex align-items-center justify-content-between my-5">
                                <div class="">
                                <input type="radio" name="que_4" value="Entrepreneurs" id="flexRadioDefault1" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault1">&nbsp;
                                    Entrepreneurs
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_4" value="Employee" id="flexRadioDefault2" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault2">&nbsp;
                                    Employee
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_4" value="Govt job" id="flexRadioDefault3" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault3">&nbsp;
                                    Govt job
                                </label>
                                </div>

                                <div class="">
                                <input type="radio" name="que_4" value="Others" id="flexRadioDefault4" style="height:15px !important;width:15px !important">
                                <label for="flexRadioDefault4">&nbsp;
                                    Others
                                </label>
                                </div>



                            </div>
                            <div>
                                <button type="button" class="btn-ma prev-btn" id="b">Back</button>
                                <button type="submit" class="btn-ma submit-btn "
                                    id="b">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

    const steps = Array.from(document.querySelectorAll('form .step'));

    const nextBtn = document.querySelectorAll('form .next-btn');
    const prevBtn = document.querySelectorAll('form .prev-btn');
    const progressbar = Array.from(document.querySelectorAll('ul li.progressbar'));

    const submitBtn = document.querySelector('.submit-btn');

    nextBtn.forEach(button => {
        button.addEventListener('click', () => {
            changeStep('next');

        })
    })

    prevBtn.forEach(button => {
        button.addEventListener('click', () => {
            changeStep('prev');
        })
    })




    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        var formData = $('form').serializeArray();
        console.log(formData);
                $.ajax({
                    url: "{{ url('/surveystore') }}",
                    type: 'post',
                    data: formData,
                    datatype: 'json',
                    success: function(data) {
                        alert("Data saved");
                        location.reload();
                    },
                    error: function(data){
                        // $(".error-msg").text("Please fill all the data");
                        alert("Please fill all the data");
                    }
                })
    })


    function changeStep(btn) {
        let index = 0;
        let pindex = 0;
        const active = document.querySelector('form .step.active');
        const pActive = document.querySelector('ul li.progressbar.active');
        index = steps.indexOf(active);
        const form = document.querySelector('form')
        pindex = progressbar.indexOf(pActive);
        steps[index].classList.remove('active');
        progressbar[pindex].classList.remove('active');
        if (btn === 'next') {
            index++;
            pindex++;
        } else if (btn === 'prev') {
            index--;
            pindex--;
        }
        steps[index].classList.add('active');
        progressbar[pindex].classList.add('active');
    }
</script>
