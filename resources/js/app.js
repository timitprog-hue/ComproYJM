import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination, Navigation, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

window.Swiper = Swiper;
Swiper.use([Autoplay, Pagination, Navigation, EffectFade]);
