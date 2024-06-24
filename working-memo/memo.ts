import { MockedRequest, RestHandler, rest, type DefaultBodyType } from 'msw';
import icrDetail from './v1/m/icrDetail';


export const handlers: RestHandler<MockedRequest<DefaultBodyType>>[] = [
  rest.get('*/v1/m/icrs/:id', icrDetail.get),
  rest.patch('*/v1/m/icrs/:id/edit', icrDetail.patch),
];