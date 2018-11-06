const disk = $('.disk div');
const audio = $('audio');
const trackName = $('.info h3');
const artistName = $('.info h2');
let currentTrack = 0;

let music = [];

// This initPlayer fetches the lastest 14 tracks from kiwi6, but doesn't seem to work in CodePen due to the CORS restrictions. You can use this function on your local machine to see the functionality!

const initPlayer = () => {
  music = [
    {title: "Amanecer", artist: "SlyPro", music: "audio/amanecer/Amanecer(Original Mix).mp3", img: "carat/amanecer.jpg"},
    {title: "Resonancia Magnetica", artist: "SlyPro", music: "audio/amanecer/ResonanciaMagnetica(Original Mix).mp3", img: "carat/amanecer.jpg"},
  ]
  setTrack(0)
	$('#next_track').on('click', nextTrack)
	$('#prev_track').on('click', prevTrack)
	$('#player').removeClass('loading')
	$('#toggle_state').on('click', playOrPause);
}

// const initPlayer = (sourcetype = 'kiwi6', source = 'https://kiwi6.com/api/v1/tracks') => {
//     $('#next_track').off('click', nextTrack)
//     $('#prev_track').off('click', prevTrack)
//     $('#player').addClass('loading')
//     $('#toggle_state').off('click', playOrPause)
//     fetch(source, {
//   mode: 'no-cors' // 'cors' by default
// })
//         .then(res => {
//       console.log(res)
//             return res.json()
//         })
//         .then(json => {
//         console.log('123')
//             return json.tracks.map(el => {
//                 return {
//                     title: el.track.title,
//                     artist: el.track.artist.username,
//                     music: el.track.upload.hotlink_path,
//                     img: null
//                 }
//             })
//         })
//         .then(list => {
//             let avatars = list.map(el => {
//                 return fetch('https://kiwi6.com/api/v1/artists/' + el.artist, {
//   mode: 'no-cors' // 'cors' by default
// })
//                     .then(res => {
//                         return res.json()
//                     })
//                     .then(json => {
//                         return json.avatar;
//                     })
//             })
//             Promise.all(avatars).then(res => {
//                     list.forEach((el, i) => {
//                         if (res[i].slice(0, 2) == "//") {
//                             el.img = "https:" + res[i]
//                         } else {
//                             el.img = res[i];
//                         }
//                     })
//                     return list;
//                 })
//                 .then((list) => {
//                     music = list
//                     setTrack(0)
//                     $('#next_track').on('click', nextTrack)
//                     $('#prev_track').on('click', prevTrack)
//                     $('#player').removeClass('loading')
//                     $('#toggle_state').on('click', playOrPause);
//                 })
//         })
//         .catch(console.log)

// }

const setTrack = (i) => {
    currentTrack = i;
    $('.disk div img').attr('src', music[i].img)
    audio.attr('src', music[i].music);
    audio[0].currentTime = 0;
    trackName.text(music[i].title);
    artistName.text(music[i].artist);
    if (active) audio[0].play();
    $('.disk div img').on('load', () => {
        if (active) {
            let avg = $('.player img').attr('avg').split('|');
            $('.disk').css('box-shadow', "0 15px 20px rgba(" + avg[0] + "," + avg[1] + "," + avg[2] + ", .6)");
        }
    })

}

const nextTrack = () => {
    if (currentTrack == music.length - 1) {
        setTrack(0)
    } else {
        setTrack(currentTrack + 1)
    }
    $('#next_track').addClass('goRight').delay(300).queue(function() {
        $(this).removeClass("goRight").dequeue();
    });

}
const prevTrack = () => {
    if (currentTrack == 0) {
        setTrack(music.length - 1)
    } else {
        setTrack(currentTrack - 1)
    }
    $('#prev_track').addClass('goLeft').delay(300).queue(function() {
        $(this).removeClass("goLeft").dequeue();
    });

}

const playOrPause = () => {
    if (!$('#toggle_state').hasClass('play')) {
        deactivate();
    } else {
        activate();
    }
    $('#toggle_state').toggleClass('play stop')
}


let active = false;
let rotation = 0;

const rotateDisk = () => {
    if (active) {
        rotation += 30;
        disk.css('transform', 'rotate(' + rotation + 'deg)');
        $('.progress div').css('width', audio[0].currentTime / audio[0].duration * 100 + "%")
    }
    setTimeout(rotateDisk, 1000)
}

rotateDisk();


const activate = () => {
    active = true;
    audio[0].play();
    let avg = $('.player img').attr('avg').split('|');
    $('.disk').css('box-shadow', "0 15px 20px rgba(" + avg[0] + "," + avg[1] + "," + avg[2] + ", .6)");
    $('.info, .player').addClass('active')


}

const deactivate = () => {
    active = false;
    audio[0].pause();
    let avg = $('.player img').attr('avg').split('|');
    $('.disk').css('box-shadow', "0 15px 20px rgba(" + avg[0] + "," + avg[1] + "," + avg[2] + ", 0)");
    $('.info, .player').removeClass('active')
}


const disks = document.querySelectorAll('.player img');
disks.forEach(function(e) {
    e.addEventListener('load', function() {
        let rgb = getAverageColourAsRGB(e);
        e.setAttribute('avg', rgb.r + "|" + rgb.g + "|" + rgb.b)
    })
})

function getAverageColourAsRGB(img) {
    var canvas = document.createElement('canvas'),
        context = canvas.getContext && canvas.getContext('2d'),
        rgb = {
            r: 102,
            g: 102,
            b: 102
        }, // Set a base colour as a fallback for non-compliant browsers
        pixelInterval = 5, // Rather than inspect every single pixel in the image inspect every 5th pixel
        count = 0,
        i = -4,
        data, length;

    // return the base colour for non-compliant browsers
    if (!context) {
        alert('Your browser does not support CANVAS');
        return rgb;
    }

    // set the height and width of the canvas element to that of the image
    var height = canvas.height = img.naturalHeight || img.offsetHeight || img.height,
        width = canvas.width = img.naturalWidth || img.offsetWidth || img.width;

    context.drawImage(img, 0, 0);

    try {
        data = context.getImageData(0, 0, width, height);
    } catch (e) {
        // catch errors - usually due to cross domain security issues
        return rgb;
    }

    data = data.data;
    length = data.length;
    while ((i += pixelInterval * 4) < length) {
        count++;
        rgb.r += data[i];
        rgb.g += data[i + 1];
        rgb.b += data[i + 2];
    }

    // floor the average values to give correct rgb values (ie: round number values)
    rgb.r = Math.floor(rgb.r / count);
    rgb.g = Math.floor(rgb.g / count);
    rgb.b = Math.floor(rgb.b / count);

    return rgb;

}

initPlayer();
