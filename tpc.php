<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Program Committee | ICSC 2022 Conference</title>
    <?php include 'includes.php' ?>
</head>

<body onload="getTPCTable();">
    <!-- Navbar begins -->

    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <section>
            <div class="mt-24 grid grid-cols-7 dark:">
                <div class="col-span-7 flex justify-center m-5">
                    <span class="dark: text-3xl font-bold">Track Chairs</span>
                </div>
                <div></div>
                <div class="col-span-5 overflow-x-auto my-5">
                    <table class="table table-compact table-center mx-auto text-md">
                    <thead>
                        <tr class="text-center">
                            <th></th>
                            <th class="font-bold">Chair</th>
                            <th class="font-bold">Co-Chair</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="font-bold">Communication</td>
                            <td>Prof. Ghanshyam Singh, Professor, MNIT Jaipur, India</td>
                            <td>Dr. Jasmine Saini, Jaypee Institute of Information Technology, Noida, India
</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Signal Processing</td>
                            <td>Prof. Ram Bilas Pachori,  IIT Indore, India</td>
                            <td>Dr. Richa Gupta, Jaypee Institute of Information Technology, Noida, India</td>
                        </tr>
                        <tr>
                            <td class="font-bold">VLSI Technology & <br> Embedded Systems</td>
                            <td>Prof. Manish Goswami, IIIT Allahabad, India</td>
                            <td>Dr. Satyendra Kumar, Jaypee Institute of Information Technology, Noida, India</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Intelligent Computing <br> and Machine Learning</td>
                            <td> Prof. Karm Veer Arya, ABV-IIITM, Gwalior-474 015, India
</td>
                            <td>Dr. Vineet Khandelwal, Jaypee Institute of Information Technology, Noida, India
</td>
                        </tr>
                    </tbody>
                    </table>

                </div>
                <div></div>

                <div class="col-span-7 flex justify-center m-5">
                    <span class="dark: text-3xl font-bold">Technical Program Committee</span>
                </div>
                <div></div>
                <div class="col-span-5 flex justify-center mt-2">
                    <div class="overflow-x-auto" id="tpcData">

                    </div>
                </div>
                <div></div>

            </div>
        </section>
        <hr class="w-full" />
        <section>
            <?php include 'footer.php' ?>
        </section>
    </div>

    <!-- Footer begins -->

    <!-- Footer ends -->
</body>

</html>