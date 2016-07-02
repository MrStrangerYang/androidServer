/**
 * Created by mrstranger on 16/6/29.
 */
require.config({
    baseUrl:"/Admin/Home/assets/js",
    paths:{
        jquery: '/Public/app/vendor/AdminLTE/plugins/jQuery/jQuery-2.2.0.min',
        app: '/Public/app/vendor/AdminLTE/dist/js/app.min',
        bootstrap: '/Public/app/vendor/AdminLTE/bootstrap/js/bootstrap.min'
    },
    shim: {
        bootstrap: {deps: ['jquery'],exports:'bootstrap'},
        app: {deps: ['bootstrap']}
    }
});