import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-employment-history-array', IndexField)
  app.component('detail-employment-history-array', DetailField)
  app.component('form-employment-history-array', FormField)
})
