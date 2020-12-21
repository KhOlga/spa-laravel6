import Logo from './components/Logo';
import LogoSymbol from "./components/LogoSymbol";
import Colors from "./components/Colors";
import Illustrations from "./components/Illustrations";
import Animations from "./components/Animations";
import Wallpapers from "./components/Wallpapers";
import Theme from "./components/Theme";
import Typography from "./components/Typography";
import NotFound from "./components/NotFound";

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound,
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol,
        },
        {
            path: '/colors',
            component: Colors,
        }
        ,
        {
            path: '/illustrations',
            component: Illustrations,
        },
        {
            path: '/animations',
            component: Animations
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
        },
        {
            path: '/theme',
            component: Theme,
        }
        ,
        {
            path: '/typography',
            component: Typography,
        },
    ]

}
