import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-service-bonds-array', IndexField)
  app.component('detail-service-bonds-array', DetailField)
  app.component('form-service-bonds-array', FormField)
})
