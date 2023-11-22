import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-link-field', IndexField)
  app.component('detail-link-field', DetailField)
  app.component('form-link-field', FormField)
})
