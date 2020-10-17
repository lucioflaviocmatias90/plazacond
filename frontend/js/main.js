new Vue({
  el: '#app',
  data: {
    metrics: {
      residents: 98,
      vehicles: 75,
      visits: 5367,
      letters: 156,
      classifieds: 12,
      notifications: 6,
      kiosks: 37,
      visitants: 7
    },
    residents: {
      total: 8,
      list: [
        {
          name: 'Alexander Piece',
          picture: 'dist/img/user1-128x128.jpg',
          date: 'Hoje'
        },
        {
          name: 'Norman',
          picture: 'dist/img/user8-128x128.jpg',
          date: 'Ontem'
        },
        {
          name: 'Jane',
          picture: 'dist/img/user7-128x128.jpg',
          date: '12 de janeiro'
        },
        {
          name: 'John',
          picture: 'dist/img/user6-128x128.jpg',
          date: '12 de janeiro'
        },
        {
          name: 'Alexander',
          picture: 'dist/img/user2-160x160.jpg',
          date: '13 de janeiro'
        },
        {
          name: 'Sarah',
          picture: 'dist/img/user5-128x128.jpg',
          date: '14 de janeiro'
        },
        {
          name: 'Nora',
          picture: 'dist/img/user4-128x128.jpg',
          date: '15 de janeiro'
        },
        {
          name: 'Nadia',
          picture: 'dist/img/user3-128x128.jpg',
          date: '15 de janeiro'
        }
      ]
    },
    letters: {
      list: [
        {
          apartment: 'A/33',
          title: 'Jornal e Revista',
          status: 'ENTREGUE'
        },
        {
          apartment: 'C/12',
          title: 'Encomenda',
          status: 'PORTARIA'
        },
        {
          apartment: 'B/33',
          title: 'Caixa',
          status: 'PORTARIA'
        },
        {
          apartment: 'C/12',
          title: 'Sedex',
          status: 'ENTREGUE'
        },
        {
          apartment: 'E/11',
          title: 'Conta de Luz',
          status: 'PORTARIA'
        },
        {
          apartment: 'C/34',
          title: 'Sedex',
          status: 'PORTARIA'
        }
      ]
    },
    classifieds: {
      list: [
        {
          name: 'Samsung TV',
          price: 'R$ 1.800,00',
          description: 'Samsung 32" 1080p 60Hz LED Smart HDTV.'
        },
        {
          name: 'Bicicleta Mountain Bike',
          price: 'R$ 700,00',
          description: '26" Mongoose Dolomite Men\'s 7-speed, Navy Blue.'
        },
        {
          name: 'Xbox One',
          price: 'R$ 350,00',
          description: 'Xbox One Console Bundle with Halo Master Chief Collection.'
        },
        {
          name: 'PlayStation 4',
          price: 'R$ 399,00',
          description: 'PlayStation 4 500GB Console (PS4)'
        }
      ]
    }
  }
})
