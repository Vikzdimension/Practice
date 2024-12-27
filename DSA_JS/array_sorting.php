<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
</head>
<body>
<h2>Array Sorting</h2>
<h3>Original Array: (5, 3, 7, 1, 9, 2, 8, 4, 6) </h3>

<script>
    var arr = [5, 3, 7, 1, 9, 2, 8, 4, 6];
    document.write("<h2>Sorted Array: </h2>");

    // for( let i =0; i < arr.length; i++){
    //     for( let j = 0; j < arr.length; j++){
    //         if(arr[i] < arr[j]){
    //             let temp = arr[i];
    //             arr[i] = arr[j];
    //             arr[j] = temp;
    //         }
    //     }   
    // }
    // document.write(arr);
    document.write(arr.sort(function(a, b){return a-b;}));
</script>
</body>
</html>