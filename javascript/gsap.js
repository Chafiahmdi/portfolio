// gsap.registerPlugin(scrollTrigger)

let tl = gsap.timeline();
                        tl.from(".logo", { 
                            duration:2, // Durée de l'animation en secondes
                            opacity: 0,
                            x:-50 // Animation sur l'axe X
                        }); 
                        tl.from(".intro h1", {     
                            duration:1,
                            opacity: 0,
                            y: -50,  // Animation sur l'axe Y
                            ease: "power2.Out" //Courbe d'accélération de l'animation
                        }); 
                        tl.from(".intro p", {     
                          duration:1,
                          opacity: 0,
                          y: 50,  // Animation sur l'axe Y
                          ease: "power2.Out" //Courbe d'accélération de l'animation
                        // },); 
        

})     
                  gsap.to(".copyright", {     
                            duration:1,
                            y: -9,  // Animation sur l'axe Y
                            scrollTrigger: ".copyright",
                          })

//   rotation: 360, // Rotation de l'image
                        // }); 
// ScrollTrigger.create({
//     animation: gsap.from(".titre", {
//         y: "50vh",
//         scale: 6,
//         yPercent: -50,
//     }),
//     scrup: true,
//     trigger: ".rose",
//     start: "top bottom",
//     endTrigger: ".rose",
//     end: "top center",
// })

// ScrollTrigger.bach(".rose", {
//     onEnter: bach => gsap.to(batch,{autoAlpha: 1, stagger: 0.1}),


// gsap.to(".rose", {
//     scrollTrigger: ".rose", // start the animation when ".box" enters the viewport (once)
//     y: 500,
//     apacity: 0
//   });
