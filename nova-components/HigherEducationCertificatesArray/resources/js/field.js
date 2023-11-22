import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-higher-education-certificates-array', IndexField)
  app.component('detail-higher-education-certificates-array', DetailField)
  app.component('form-higher-education-certificates-array', FormField)
})
