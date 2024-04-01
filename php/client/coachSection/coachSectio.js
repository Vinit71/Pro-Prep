// document.querySelectorAll("form").forEach(form => {
//     form.addEventListener("submit", function(event) {
//         event.preventDefault(); // Prevent the form from submitting normally

//         const planName = this.closest(".plan").querySelector("h2").textContent;

//         // Change the innerHTML of the pricing class
//         document.querySelector(".pricing").innerHTML = `
//                 <div class="circle-loader">
//                     <div class="checkmark"></div>
//                 </div>
                
//                 <div class="baapButton"></div>
//                 `;

//                 setTimeout(function() {
//                     var circleLoader = document.querySelector('.circle-loader');
//                     var checkmark = document.querySelector('.checkmark');
                    
//                     circleLoader.classList.add('load-complete');
//                     checkmark.style.display = 'block';
//                   }, 2000);
                  
//             setTimeout(() => {
//                 // Change the innerHTML of the pricing class to the thank you message and button
//                 document.querySelector(".baapButton").innerHTML = `
                    
//                     <button onclick="window.location.href='../index.php';" 
//                     style="background-color: red;
                    
                        
//                         color: white;
//                         padding: 10px 20px;
//                         border: 2px solid black; 
//                         border-radius: 5px; 
//                         cursor: pointer; 
//                         ">Go to Index</button>`; }, 2000);

// });
// });