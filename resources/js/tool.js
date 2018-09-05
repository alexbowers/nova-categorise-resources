Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-categorise-resources',
            path: '/nova-categorise-resources',
            component: require('./components/Tool'),
        },
    ])
})
