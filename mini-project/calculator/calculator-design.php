<link href="./css/styel.css" rel="stylesheet">

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-xl-4 col-lg-5 col-md-6">

            <div class="card shadow border-0 rounded-4">

                <div class="card-header bg-dark text-white text-center py-3">

                    <h3 class="mb-0">
                        <i class="bi bi-calculator"></i>
                        Calculator
                    </h3>

                </div>

                <div class="card-body p-4">

                    <!-- Display -->

                    <div class="mb-4">

                        <input type="text" id="display" class="form-control form-control-lg text-end fw-bold" value="0"
                            readonly>

                    </div>

                    <!-- Buttons -->

                    <div class="row g-3">

                        <!-- Row 1 -->

                        <div class="col-3">
                            <button class="btn btn-danger w-100 calc-btn" onclick="calcAction('clear')">C</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-danger w-100 calc-btn" onclick="calcAction('del')">DEL</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-warning w-100 calc-btn" onclick="calcOperators('%')">%</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-warning w-100 calc-btn" onclick="calcOperators('/')">/</button>
                        </div>

                        <!-- Row 2 -->

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(7)">7</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(8)">8</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(9)">9</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-warning w-100 calc-btn" onclick="calcOperators('*')">*</button>
                        </div>

                        <!-- Row 3 -->

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(4)">4</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(5)">5</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(6)">6</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-warning w-100 calc-btn" onclick="calcOperators('-')">-</button>
                        </div>

                        <!-- Row 4 -->

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(1)">1</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(2)">2</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(3)">3</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-warning w-100 calc-btn" onclick="calcOperators('+')">+</button>
                        </div>

                        <!-- Row 5 -->

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="calcBtn(0)">0</button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-secondary w-100 calc-btn" onclick="decimalBtn('.')">.</button>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-success w-100 calc-btn" onclick="finalCalEqual('=')">=</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<script src="./js/script.js">