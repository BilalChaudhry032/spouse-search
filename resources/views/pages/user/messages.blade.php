@extends('layouts.user')

@section('content')



    <!-- Navigation Starts Here -->
    @include('layouts.user.navigation')
    <script>
        $('#myList a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>

    <!-- Main Area Starts Here -->
    <main id="app">
        <section class="container-fluid chat-section">
            <div class="container">
                <div class="row">
                    <contacts></contacts>
                    <div class="tab-content col-sm-9 col-9 px-0" style="height: 85vh; overflow: hidden">
                        <div class="chat-content tab-pane active" id="one" role="tabpanel">
                            <chat-log :messages="messages"></chat-log>
                            <chat-composer v-on:messsagesent="addMessage"></chat-composer>
                        </div>
                        <div class="chat-content tab-pane" id="two" role="tabpanel" style="height: 85vh">
                            <chat-log :messages="messages"></chat-log>
                            <chat-composer v-on:messsagesent="addMessage"></chat-composer>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- Main Area Ends Here -->
@endsection

